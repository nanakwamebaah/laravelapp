<template>
    <nav>
                <!---nav left-->
        <div class="nav-left">
            <!--<a href="login.html"><img src="Images/logo.jpeg" class="logo"></a>-->
            <div class="search-box">
                <img src="../images/search.png">
                <input type="text" placeholder="search">
            </div>          
        </div>
        <!---nav right-->
      <div class="nav-right">
        <ul>
                
            <li><img src="../images/notification.png"></li>
            <li><img src="../images/inbox.png"></li>
            <li><img src="../images/video.png"></li>
        </ul>
        <div class="nav-user-icon online" @click="settingMenuToggle">
            <img src="../images/profile-pic1.jpg">
        </div>
      </div>
      <div class="settings-menu" >
          <div id="dark-btn" v-on:click="swich">
              <span></span>
          </div>
          <div class="settings_menu-inner">
                <div class="user-profile">
                    <img src="../images/profile-pic1.jpg">
                    <div>
                        <p>rolex wilson</p>
                        <a href="#">see your profile</a>
                    </div>
                </div>
                <hr>

                <div class="user-profile">
                    <img src="../images/feedback.png">
                    <div>
                        <p>Give feedback</p>
                        <a href="#">Help as improve new design</a>
                    </div>
                </div>
                <hr>
                <div class="settings-links">
                    <img src="../images/setting.png" class="settings-icon">
                    <a href="#">settings & privacy<img src="../images/arrow.png" width="10px"></a>
                </div>

                <div class="settings-links">
                    <img src="../images/help.png" class="settings-icon">
                    <a href="#">Help & Support<img src="../images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="../images/display.png" class="settings-icon">
                    <a href="#">Display <img src="../images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="../images/logout.png" class="settings-icon">
                    <router-link :to="{path: '/login'}">Logout<img src="../images/arrow.png" width="10px"></router-link>
        
                </div>
            </div> 
      </div>
    </nav>
</template>

<script>

export default ({
    data:{
        //'max-height':'0px'

    },
     methods: {
         settingMenuToggle(){
            
             var settingsmenu = document.querySelector('.settings-menu');
             settingsmenu.classList.toggle('settings-menu-height')
             
         },
         swich(){
             var darkbtn = document.getElementById("dark-btn");
             darkbtn.classList.toggle("dark-btn-on");
             document.body.classList.toggle("dark-theme");
             if(localStorage.getItem("theme") == "light"){
                 localStorage.setItem("theme","dark");
             }
             else{
                 localStorage.setItem("theme","light");
             }
             
         },
         /*swi(){
             if (localStorage.getItem("theme") == "light"){
                 darkbtn.classList.remove("dark-btn-on");
                 document.body.classList.remove("dark-theme");
             }
             else if(localStorage.getItem("theme") == "dark"){
                 darkbtn.classList.add("dark-btn-on");
                 document.body.classList.add("dark-theme");
             }
             else{
                 localStorage.setItem("theme","light")
             }
         }*/
         
     }
})
</script>
