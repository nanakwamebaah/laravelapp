<template>  
    <section>
    <Navbar/>

    <main class="content">
        <Postleft/>
        <Post/>
        <Postright/>
        
    </main> 
    
     

   
    </section>
    
</template>

<script>
import Postleft from '../components/Postleft'
import Postright from '../components/Postright'
import Navbar from '../components/Navbar'
import Post from '../components/Post'
export default({
    name : 'Group',
   components: {        
        Postleft,
        Postright,
        Navbar,
        Post
    }
})
</script>

<style>
.content{
    display: flex;
    justify-content:space-between;
    padding :13px 5%;
}
/*.content {

}*/
</style>