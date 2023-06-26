async function api(){
    let url = "";
    if(location.host == "localhost:8080") {
        url = "http://localhost:8000/api/info";
    } else {
        url = "/api/info";
    }
    let response = await fetch(url);
    let responseJson = response.json();
    return await responseJson;
}

export default api;