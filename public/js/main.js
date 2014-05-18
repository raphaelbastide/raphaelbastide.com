jsPlumb.ready(function () {

  $(window).scroll(function () {
    jsPlumb.repaintEverything();
  });



  jsPlumb.importDefaults({
    Container: $("main"),
    // default drag options

  });
  var allSourceEndpoints = [],
    allTargetEndpoints = [];
  var connectorPaintStyle = {
    lineWidth: 1,
    strokeStyle: "#d3d3d3",
    joinstyle: "round"
  };
  var sourceEndpoint = {
    endpoint: "Dot",
    paintStyle: {
      radius: 0
    },
    isSource: true,
    connector: ["Straight", {
      stub: 40
    }],
    connectorStyle: connectorPaintStyle,
  };
  var targetEndpoint = {
    endpoint: "Dot",
    paintStyle: {
      radius: 0
    },
    maxConnections: -1,
    dropOptions: {
      hoverClass: "hover",
      activeClass: "active"
    },
    isTarget: true
  };

  _addEndpoints = function (toId, sourceAnchors, targetAnchors) {
    if (sourceAnchors)
      for (var i = 0; i < sourceAnchors.length; i++) {
        var sourceUUID = toId + sourceAnchors[i];
        allSourceEndpoints.push(jsPlumb.addEndpoint(toId, sourceEndpoint, {
          anchor: sourceAnchors[i],
          uuid: sourceUUID
        }));
      }
    if (targetAnchors)
      for (var j = 0; j < targetAnchors.length; j++) {
        var targetUUID = toId + targetAnchors[j];
        allTargetEndpoints.push(jsPlumb.addEndpoint(toId, targetEndpoint, {
          anchor: targetAnchors[j],
          uuid: targetUUID
        }));
      }
  };

  _addEndpoints("niei", ["RightMiddle"]);
  _addEndpoints("niei-img", null, ["LeftMiddle"]);

  jsPlumb.connect({
    uuids: ["nieiRightMiddle", "niei-imgLeftMiddle"]
  });
});