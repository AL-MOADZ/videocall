<html>
<body>
  
 <div id="root"</bodydiv>

</body>

<script src="wss://webliveroom985604664-api.coolzcloud.com/ws"></script>
<script src="https://resource.zegocloud.com/prebuilt/crypto-js.js"></script>
<script src="https://resource.zegocloud.com/prebuilt/prebuiltToken.js"></script>
<script src="https://zegocloud.github.io/zegocloud_prebuilt_webrtc/ZegoPrebuilt/index.umd.js"></script>


<script>
    

    const TOKEN = generatePrebuiltToken(985604664,"966af1bd04ddea1816b84513ca82df52",'room2','UserID-' + Math.random(),'jack'+ Math.random());
    
    const zp = ZegoUIKitPrebuilt.create(TOKEN);
    zp.joinRoom({
        container : document.querySelector("#root"),
    });
</script>

</html>