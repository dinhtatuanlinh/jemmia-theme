// connect socketio
// nếu client là 1 trang web bên thứ 3 thì phải bổ xung thêm biến connectionOption ở dưới thì mới connect được
// nếu là trang render từ chính server thì ko cần biến connectionOption này
// để kết nối từ server này qua server khác thì bỏ 4 dòng đầu hiện dòng withCredentials: true
let connectionOptions =  {
    // "force new connection" : true,
    // "reconnectionAttempts": "Infinity", 
    // "timeout" : 10000,                  
    // "transports" : ["websocket"],
    // extraHeaders: {    "my-custom-header": "abcd"  },
    withCredentials: true,
};


let socket = io.connect('https://salemanage.noteatext.com/', connectionOptions);