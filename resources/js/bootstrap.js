import axios from "axios";
import Echo from "laravel-echo";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "d81ed4f41e49070cb6f4",
    cluster: "eu",
    forceTLS: true,
});

var channel = Echo.channel("my-channel");
channel.listen(".my-event", function (data) {
    alert(JSON.stringify(data));
});
