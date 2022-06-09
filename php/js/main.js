const app = new Vue({
    el : "#app",
    data: {
        apiUrl : "http://localhost/php-ajax-dischi/php/db/api.php",
        discs: [],
        genres:["all"],
        authors:["all"],
        authorSel : "all",
        genreSel : "all"
    },
    methods: {
        getApi(){
            axios.get(this.apiUrl)
            .then((result) => {
                this.discs = result.data
                console.log(result.data)   
                this.discs.forEach(obj => {
                    if(!this.genres.includes(obj.genre)){
                        this.genres.push(obj.genre)
                    }
                });
                this.discs.forEach(obj => {
                    if(!this.authors.includes(obj.author)){
                        this.authors.push(obj.author)
                    }
                });
                console.log(this.author)
            })
        },

        getfilteredApi(){
            console.log(this.genreSel)
            if(!(this.authorSel === "all") && !(this.genreSel === "all")){
                const parimi = {
                    author : this.authorSel ,
                    genre : this.genreSel ,
                }
                axios.get(this.apiUrl, {
                    params : parimi
                })
                .then(r=>{
                    this.discs = r.data
                    console.log(r.data)
                })
            console.log("funziono qua1")

            }else if(!(this.authorSel === "all") && this.genreSel === "all"){
                const parimi = {
                    author : this.authorSel 
                }
                axios.get(this.apiUrl, {
                    params : parimi
                })
                .then(r=>{
                    this.discs = r.data
                    console.log(r.data)
                })
            console.log("funziono qua2")

            }else if(this.authorSel === "all" &&!( this.genreSel === "all")){
                const parimi = {
                    genre : this.genreSel 
                }
                axios.get(this.apiUrl, {
                    params : parimi
                })
                .then(r=>{
                    this.discs = r.data
                    console.log(r.data)
                })
            console.log("funziono qua3")

            }else{
                this.getApi()
            console.log("funziono qua4")
        }
            
        }

    },
    mounted() {
        this.getApi()
    },
})