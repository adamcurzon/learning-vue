const url = "http://localhost:8000/api/info"

async function api(){
    let response = await fetch(url);
    let responseJson = response.json();
    return await responseJson;
}

export default api;