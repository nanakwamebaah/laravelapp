<template>
    <section class="main-content">
        <p>Recent activities</p>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="css/images/anime1.jpeg">
                        <div>
                            <p>Manga Forum</p>
                            <span>June 24 2021, 13:40pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>
                
                <p class="post-info">movie dropping December <span>@Anime</span><a href="#">#Anime</a> </p>
                <img src="css/images/anime2.jpeg" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="../images/like-blue.png">500</div>
                        <div><img src="../images/comments.png">400</div>
                        <div><img src="../images/share.png">400</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="../images/profile-pic1.jpg"><i class="fas fa-caret-down"></i>
                    </div>
                </div>
            

            </div>

            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="css/images/anime1.jpeg">
                        <div>
                            <p>Manga Forum</p>
                            <span>August 24 2021, 16:40pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>
                <p class="post-info">Senpai <span>@Anime</span><a href="#">#GoAnime</a> </p>
                <img src="css/images/anime7.jpeg" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="../images/like-blue.png">700</div>
                        <div><img src="../images/comments.png">400</div>
                        <div><img src="../images/share.png">400</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="css/images/anime1.jpeg"><i class="fas fa-caret-down"></i>
                    </div>
                </div>
                <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="../images/shortcut-1.png">
                        <div>
                            <p>Web developers</p>
                            <span>June 24 2021, 13:40pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>
                
                <p class="post-info">Learn php with us <span>@WebDevs</span><a href="#">#WebDevs</a> </p>
                <img src="../images/php-frameworks.jpg" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="../images/like-blue.png">500</div>
                        <div><img src="../images/comments.png">400</div>
                        <div><img src="../images/share.png">400</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="../images/profile-pic1.jpg"><i class="fas fa-caret-down"></i>
                    </div>
                </div>
            

            </div>

            </div>
            <button type="button" class="load-more-btn">load more</button>

    </section>
    
</template>

<script>
export default {
  name: 'Post',
  
}
</script>

<style>
.main-content p{
    margin: 25px 0;
    color:#626262;
    font-weight:500;
    padding-left: 0px;
    text-align: left;
}

</style>