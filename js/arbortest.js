$(document).ready(function() {
  var sys = arbor.ParticleSystem(1000, 400, 1);
  sys.parameters({
    gravity: true
  });
  sys.renderer = Renderer("#viewport");
  var sentiment;
  var sentiment_col;


  var neg, neu, pos, compound;
  $.getJSON("../py/sentiment.json", function(data) {



    sentiment = JSON.stringify(data.sentiment);
    neg = JSON.stringify(data.points.neg);
    neu = JSON.stringify(data.points.neu);
    pos = JSON.stringify(data.points.pos);
    compound = JSON.stringify(data.points.compound);


    if(sentiment == 'positive'){
      sentiment_col = "#9ce62a";
    }else{
      sentiment_col = "#e70707"
    }
    console.log(JSON.stringify("sentiment= "+sentiment));
    console.log(JSON.stringify("neg= "+neg));
    console.log(JSON.stringify("neu= "+neu));
    console.log(JSON.stringify("pos= "+pos));
    console.log(JSON.stringify("compound= "+compound));
    var b_data = {
      nodes: {},
      edges: {
        genre: {}
      }
    };

    var genre = {
      genre: {
        label: "Sentiment:",
        sentiment: sentiment,
        shape: "dot",
        color: sentiment_col
      }
    };

    var edges = {
      genre: {}
    };
    var nodes = {};
    //console.log(pos);
    edges['genre']['Negative'] = {};
    edges['genre']['Neutral'] = {};
    edges['genre']['Positive'] = {};
    edges['genre']['Compound'] = {};

    nodes['Negative'] = {};
    nodes['Neutral'] = {};
    nodes['Positive'] = {};
    nodes['Compound'] = {};

    nodes['Negative'].label = "Negativity:";
    nodes['Negative'].neg = neg;
    nodes['Negative'].shape = "dot";

    nodes['Neutral'].label = "Neutrality:";
    nodes['Neutral'].neu = neu;
    nodes['Neutral'].shape = "dot";

    nodes['Positive'].label = "Positivity:";
    nodes['Positive'].pos = pos;
    nodes['Positive'].shape = "dot";

    nodes['Compound'].label = "Compound:";
    nodes['Compound'].compound = compound;
    nodes['Compound'].shape = "dot";

    Object.assign(b_data.nodes, nodes);
    Object.assign(b_data.edges, edges);
    Object.assign(b_data.nodes, genre);

    console.log(b_data);
    sys.graft(b_data);
  }).fail(function() {
    console.log("No data has been submitted");
  });

});
