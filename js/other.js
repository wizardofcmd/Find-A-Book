initMouseHandling:function(){
    // no-nonsense drag and drop (thanks springy.js)
    selected = null;
    nearest = null;
    var dragged = null;
    var oldmass = 1;
    var mouse_is_down = false;
    var mouse_is_moving = false;


    // set up a handler object that will initially listen for mousedowns then
    // for moves and mouseups while dragging
    var handler = {
      mousemove:function(e){
        if(!mouse_is_down){
          var pos = $(canvas).offset();
          _mouseP = arbor.Point(e.pageX-pos.left, e.pageY-pos.top)
          nearest = particleSystem.nearest(_mouseP);

          if (!nearest.node) return false
          selected = (nearest.distance < 50) ? nearest : null
          if(selected && selected.node.data.link){
            dom.addClass('linkable')
          } else {
            dom.removeClass('linkable')
          }
        }
        return false
      },
      clicked:function(e){
        var pos = $(canvas).offset();
        _mouseP = arbor.Point(e.pageX-pos.left, e.pageY-pos.top)
        nearest = particleSystem.nearest(_mouseP);

        if (!nearest.node) return false
        selected = (nearest.distance < 50) ? nearest : null

        if (nearest && selected && nearest.node===selected.node){
          var link = selected.node.data.link
          if (link.match(/^#/)){
             $(that).trigger({type:"navigate", path:link.substr(1)})
          }else{
             window.open(link, "_blank")
          }
          return false
        }
      },
      mousedown:function(e){
        var pos = $(canvas).offset();
        _mouseP = arbor.Point(e.pageX-pos.left, e.pageY-pos.top)
        selected = nearest = dragged = particleSystem.nearest(_mouseP);

        if (dragged.node !== null) dragged.node.fixed = true

        mouse_is_down = true
        mouse_is_moving = false

        $(canvas).bind('mousemove', handler.dragged)
        $(window).bind('mouseup', handler.dropped)

        return false
      },
      dragged:function(e){
        var old_nearest = nearest && nearest.node._id
        var pos = $(canvas).offset();
        var s = arbor.Point(e.pageX-pos.left, e.pageY-pos.top)

        mouse_is_moving = true

        if (!nearest) return
        if (dragged !== null && dragged.node !== null){
          var p = particleSystem.fromScreen(s)
          dragged.node.p = p
        }

        return false
      },

      dropped:function(e){
        if (dragged===null || dragged.node===undefined) return
        if (dragged.node !== null) dragged.node.fixed = false
        dragged.node.tempMass = 50
        dragged = null
        selected = null
        $(canvas).unbind('mousemove', handler.dragged)
        $(window).unbind('mouseup', handler.dropped)
        _mouseP = null

        if(mouse_is_moving){
          // console.log("was_dragged")
        } else {
          handler.clicked(e)
        }

        mouse_is_down = false

        return false
      }
    }
    $(canvas).mousedown(handler.mousedown);
    $(canvas).mousemove(handler.mousemove);

  }

}