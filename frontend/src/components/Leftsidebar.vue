<template>
    <section class="left-sidebar">
                <div class="imp-links">
                    <a href="#"><img src="../images/news.png">Latest News</a>
                    <a href="#"><img src="../images/friends.png">Friends</a>
                    <router-link :to="{path:'/group'}"><img src="../images/group.png">Group</router-link>
                    <!--<a href="#"><img src="images/marketplace.png">Marketplace</a>
                    <a href="#"><img src="images/watch.png">watch</a>
                    <a href="#"><img src="images/memories.png">Memories</a>-->
                    <a href="#"> See More</a>
                </div>
                <div class="shortcut-links">
                    <p>Your shortcuts</p>
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