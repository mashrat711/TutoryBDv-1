<!DOCTYPE html>
<head>
    <title>Zoom WebSDK</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.8/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.8/css/react-select.css"/>
    <meta name="format-detection" content="telephone=no">
</head>
<body>
<style>
    body {
        padding-top: 50px;
    }
</style>

<nav id="nav-tool" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">MyMeetingApp</a>
        </div>
        <div id="navbar">
            <form class="navbar-form navbar-right" id="meeting_form">
                <div class="form-group">
                    <input type="text" name="display_name" id="display_name" value="WebSDK1.7.8#CDN" placeholder="Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="text" name="meeting_number" id="meeting_number" value="7320351066" placeholder="Meeting Number" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary" id="join_meeting">Join</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>


<script src="https://source.zoom.us/1.7.8/lib/vendor/react.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/react-dom.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/redux.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/redux-thunk.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/jquery.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/lodash.min.js"></script>

<script src="https://source.zoom.us/zoom-meeting-1.7.8.min.js"></script>
<script>
    ZoomMtg.setZoomJSLib('https://source.zoom.us/1.7.2/lib', '/av');

    
    (function()
    {
console.log('checkSystemRequirements');
console.log(JSON.stringify(ZoomMtg.checkSystemRequirements()));

// it's option if you want to change the WebSDK dependency link resources.
// ZoomMtg.setZoomJSLib('https://source.zoom.us/1.7.8/lib', '/av'); // CDN version default
// ZoomMtg.setZoomJSLib('https://jssdk.zoomus.cn/1.7.8/lib', '/av'); // china cdn option 
// ZoomMtg.setZoomJSLib('http://localhost:9999/node_modules/@zoomus/websdk/dist/lib', '/av'); // Local version default



ZoomMtg.preLoadWasm();

ZoomMtg.prepareJssdk();

var API_KEY = '5-G6xoNRTPCU53BI-3lcoQ';

/**
 * NEVER PUT YOUR ACTUAL API SECRET IN CLIENT SIDE CODE, THIS IS JUST FOR QUICK PROTOTYPING
 * The below generateSignature should be done server side as not to expose your api secret in public
 * You can find an eaxmple in here: https://marketplace.zoom.us/docs/sdk/native-sdks/Web-Client-SDK/tutorial/generate-signature
 */
var API_SECRET = 'rfGxuOM1kO3fNrifm1BaHLdtw6SHG83SOt8A';

document.getElementById('join_meeting').addEventListener('click', function(e){

    e.preventDefault();

    if(!this.form.checkValidity()){
        alert("Enter Name and Meeting Number");
        return false;
    }

    var meetConfig = {
        apiKey: API_KEY,
        apiSecret: API_SECRET,
        meetingNumber: parseInt(document.getElementById('meeting_number').value),
        userName: document.getElementById('display_name').value,
        passWord: "9BxNeZ",
        leaveUrl: "http://127.0.0.1:8000/zoom/vClass",
        role: 1
    };


    var signature = ZoomMtg.generateSignature({
        meetingNumber: meetConfig.meetingNumber,
        apiKey: meetConfig.apiKey,
        apiSecret: meetConfig.apiSecret,
        role: meetConfig.role,
        success: function(res){
            console.log(res.result);
        }
    });

    ZoomMtg.init({
        leaveUrl: 'http://127.0.0.1:8000/zoom/vClass',
        success: function () {
            ZoomMtg.join(
                {
                    meetingNumber: meetConfig.meetingNumber,
                    userName: meetConfig.userName,
                    signature: signature,
                    apiKey: meetConfig.apiKey,
                    userEmail: 'email@gmail.com',
                    passWord: meetConfig.passWord,
                    success: function(res){
                        $('#nav-tool').hide();
                        console.log('join meeting success');
                    },
                    error: function(res) {
                        console.log(res);
                    }
                }
            );
        },
        error: function(res) {
            console.log(res);
        }
    });

});

}
)();
</script>

<script>

</script>
</body>
</html>