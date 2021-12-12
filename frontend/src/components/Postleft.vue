<template>
    <section class="left-sidebar">
                <div class="imp-links">
                    <p>Groups</p>
                    <div class="searchbox">
                        <img src="../images/search.png">
                        <input type="text" placeholder="search">
                    </div> 
                    <a href="#"><img src="../images/news.png">Your feed</a>
                    <a href="#"><img src="../images/friends.png">Discover</a>
                    <a href="#"><img src="../images/notification.png">Your notifications</a>
                    <!--<a href="#"><img src="images/marketplace.png">Marketplace</a>
                    <a href="#"><img src="images/watch.png">watch</a>
                    <a href="#"><img src="images/memories.png">Memories</a>-->
                    <button type="button" class="btn"> + Create New Group</button>
                </div>
                <div class="shortcut-links">
                    <p>Groups You've joined</p>
                    <a href="#"><img src="../images/shortcut-1.png">Web Developers</a>
                    <a href="#"><img src="css/images/cat.jpeg">Cute Cats</a>
                    <a href="#"><img src="css/images/anime1.jpeg">Manga Forum</a>
                    <a href="#"><img src="css/images/anime4.jpeg">GoAnime</a>

                </div>
        </section>
</template>

<!---<script>

export default({
    name : "Leftsidebar",
})
</script>-->

<style>
.imp-links p{
    margin: 25px 0;
    color:#626262;
    font-weight:500;
    padding-left: 0px;
    text-align: left;
}
.imp-links button{
    width: 100%;
    border-radius: 10px;
    background:aliceblue;
    border:none;
    height: 40px;
    margin: 5px 0px;
} 
.imp-links button:hover{
    cursor: pointer;
}
.searchbox{
    background:#fff;
    width:100%;
    border-radius: 20px;
    display:flex;
    align-items: center;
    padding:0 15px;
    margin: 15px 0px;
}

.searchbox img{
    width:18px;
}
.searchbox input{
    width:100%;
    background:transparent;
    padding: 10px;
    outline: none;
    border: 0;

}

</style>