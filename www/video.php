<script>
var videoUrl = "http://mvod.lvlt.rtve.es/resources/TE_glead/mp4/9/7/1427710844079.mp4";

  // Just play a video
  window.plugins.streamingMedia.playVideo(videoUrl);

  // Play a video with callbacks
  var options = {
	bgColor: "#FFFFFF",
    bgImageScale: "fit",
    initFullscreen: true, // true(default)/false iOS only
	
    successCallback: function() {
      console.log("Se ha producido un error al reproducir el video");
    },
    errorCallback: function(errMsg) {
      console.log("Error! " + errMsg);
    }
  };
  window.plugins.streamingMedia.playVideo(videoUrl, options);
  </script>

<script type="text/javascript">
app.initialize();
</script>