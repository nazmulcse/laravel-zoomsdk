ZoomMtg.setZoomJSLib('https://dmogdx0jrul3u.cloudfront.net/1.8.6/lib', '/av'); 
ZoomMtg.preLoadWasm();
ZoomMtg.prepareJssdk();
const meetConfig = {
	apiKey: 'oTjkfigSTaymH-_oKVt70g',
	signature: 'b1Rqa2ZpZ1NUYXltSC1fb0tWdDcwZy43NjMyMTkxNTg5NS4xNjEwNDc1NjkzMDAwLjEudmtPQVhabHAvbXpPQ2NKNkZaMldsNGpHNkt4aTh1c1NQTHFENi9YL3Vncz0',
	meetingNumber: '76321915895',
	leaveUrl: 'http://localhost:8000/meetingEnd',
	userName: 'Firstname Lastname',
	userEmail: 'nazmul.sbpgc@gmail.com',
	passWord: '123456', // if required
	role: 1 // 1 for host; 0 for attendee
};

ZoomMtg.init({
    leaveUrl: meetConfig.leaveUrl,
    isSupportAV: true,
    success: function() {
        ZoomMtg.join({
            signature: meetConfig.signature,
            apiKey: meetConfig.apiKey,
            meetingNumber: meetConfig.meetingNumber,
            userName: meetConfig.userName,
            // password optional; set by Host
            passWord: meetConfig.passWord 
        })		
    }
})