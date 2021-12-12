<template>  
    <section>
    <Navbar/>
    <main class="container">

    
    <Leftsidebar />    
    <Feed/>
    <Rightsidebar />   

    </main>
    </section>


    
    
</template>

<script>
import Leftsidebar from '../components/Leftsidebar'
import Rightsidebar from '../components/Rightsidebar'
import Feed from '../components/Feed'
import Navbar from '../components/Navbar'
export default({
    name : "Group",
    components: {        
        Leftsidebar,
        Rightsidebar,
        Feed,
        Navbar
    }
})
</script>
