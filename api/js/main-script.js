
new Vue({
    el: "#menus-picker",
    data: {
        menuCategories: [
            "Hambúrguers",
            "Sobremesas",
            "Bebidas",
            "Pasta",
            "Pizzas",
            "Saladas"
        ],
        currentTab: "Pizzas"
    },
    methods:{
        toggleTab: function(clickedMenu){
            this.currentTab = clickedMenu;
        }
    }
})


