class infoPanel{
    constructor(){
        this.info_pages = [
            {
                button_title : "Síður",
                page_title : "Mínar síður",
                page_text : "<h1><a href='https://kofun.jaa.is'>Austurköfun</a><br><a href=''>Dæmisíða 1</a><br><a href=''>Dæmisíða 2</a></h1>"
            },
            {
                button_title : "Um mig",
                page_title : "Um mig",
                page_text : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            },
            {
                button_title : "Hlutur 3",
                page_title : "Dæmihlutur 3",
                page_text : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            },
            {
                button_title : "Hlutur 4",
                page_title : "Dæmihlutur 4",
                page_text : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            },
            {
                button_title : "Hlutur 5",
                page_title : "Dæmihlutur 5",
                page_text : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            }
        ]

        this.pTitle = document.createElement("h1");
        this.pText = document.createElement("p");

        document.getElementById("info").appendChild(this.pTitle)
        document.getElementById("info").appendChild(this.pText)

        this.createNavList();
        this.changePanel(0);
    }

    changePanel(index){
        this.pTitle.innerText = this.info_pages[index].page_title;
        this.pText.innerHTML = this.info_pages[index].page_text;
    }

    createNavList(){
        let ulEl = document.createElement("ul")
        let index = 0;
        this.info_pages.forEach(element => {
            let liEl = document.createElement("li")
            let h1el = document.createElement("h1")
            h1el.innerText = element.button_title;
            liEl.appendChild(h1el)
            liEl.dataset.pIndex = index;
            let instance = this;
            liEl.addEventListener("click", function(){
                instance.changePanel(this.dataset.pIndex);
            }, false);
            ulEl.appendChild(liEl);
            index ++;
        });
        document.getElementById("panel_nav").appendChild(ulEl);
    }
}



window.onload = function(){
	window.info_panel = new infoPanel();
}
