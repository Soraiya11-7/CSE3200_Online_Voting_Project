const postData = async (url, data) => {
    const response = await fetch(url, {
        method: "POST",
        mode: "cors",
        cache: "no-cache",
        credentials: "same-origin",
        headers: {
            "Content-Type": "application/json"
        },
        redirect: "follow",
        referrerPolicy: "no-referrer",
        body: JSON.stringify(data)
    });
    return response.json();
}

document.getElementById("Series").addEventListener("change", async (e) => {
    // console.log(e.target.value);
    const sectionList = document.getElementById("Section");
    // console.log(sectionList.options.length)
    sectionList.replaceChildren();
    if (e.target.value == "0") return;
    const res = await postData("http://localhost/php_project/api/list_sections.php", {series: e.target.value});
    // console.log(res);
    for (val of res) {
        // console.log(val);
        const option = document.createElement("option");
        option.text = val.section;
        option.value = val.id;
        sectionList.add(option, undefined);
    }
})