
    gsap.registerPlugin(ScrollTrigger);
    
     
    
    gsap.from('.ribbon', {
        x: -40,
        opacity: 0,
        duration: 0.4
        
    },"+=0.1"),
    
    
    gsap.from('.heroTXT h1', {
        x: -40,
        opacity: 0,
        duration: 0.5
        
    },"-+-1"),
     
    
    
    gsap.from('.heroTXT ul', {
        x: -40,
        opacity: 0,
        duration: 0.4
        
    },"+=0.1"),
    
    
    gsap.from('.heroTXT a', {
        x: -40,
        opacity: 0,
        duration: 0.4
        
    },"+=0.1")
     
    
    
    gsap.from('.mainpizza', {
        x: 40,
        opacity: 0,
        duration: 0.4
    
        
    },"-=1.5"),
     
    
    
    
    gsap.from('.tomato', {
        x: 40,
        opacity: 0,
        duration: 0.4
        
    },"-=1")
     
     
    
    
    
    gsap.from('.chili', {
        x: -40,
        y: 40,
        opacity: 0,
        duration: 0.4
        
    },"-=0.7")
    
    
    
    gsap.from('.card', {
        scrollTrigger: {
            trigger: '.card',
            start: '20px, 80%'
        },
        y: 80,
        opacity: 0,
        duration: 0.7
        
    },"-=0.7")
     
    
    
    
    
    
    
    gsap.from('.grid', {
        scrollTrigger: {
            trigger: '.grid',
            start: '20px, 80%'
    
        },
        y: 80,
        opacity: 0,
        duration: 0.7
        
    },"-=0.5")
    
    
    
    gsap.from('.paraText', {
        scrollTrigger: {
            trigger: '.paraText',
            start: '40px, 80%'
    
        },
       
        y: 80,
        opacity: 0,
        duration: 0.7
        
    },"+=4")
    
    
    
    
    
    gsap.from('.contfImg', {
        scrollTrigger: {
            trigger: '.contfImg',
            start: '40px, 80%'
    
        },
       x: 40,
        y: 80,
        opacity: 0,
        duration: 0.7
        
    },"-=0.5")
    
    
    
    
    
    gsap.from('.withiconwhiteImage', {
        scrollTrigger: {
            trigger: '.withiconwhiteImage',
            start: '40px, 80%'
    
        },
       x: -40,
        opacity: 0,
        duration: 0.7
        
    },"-=0.5")
     
    
    
    
    
    gsap.from('.withiconwhiteText', {
        scrollTrigger: {
            trigger: '.withiconwhiteText',
            start: '40px, 80%'
    
        },
       x: 40,
        opacity: 0,
        duration: 0.7
        
    },"-=0.2")
    
    
    gsap.from('.greybgtext', {
        scrollTrigger: {
            trigger: '.greybgtext',
            start: '40px, 80%'
    
        },
       x: -40,
        opacity: 0,
        duration: 0.7
        
    },"-=0.2")
    
    
    
    
    
    gsap.from('.greybgimage', {
        scrollTrigger: {
            trigger: '.greybgimage',
            start: '40px, 80%'
    
        },
       x: 40,
       y: 80,
        opacity: 0,
        duration: 0.7
        
    },"-=0.2")
    
    
    
    
    gsap.from('.newchili', {
        scrollTrigger: {
            trigger: '.newchili',
            start: '10px, 80%'
    
        },
       x: -40,
       y: -40,
    
        opacity: 0,
        duration: 0.7
        
    },"+=3")

     
    gsap.from('.newleaves', {
        scrollTrigger: {
            trigger: '.newleaves',
            start: '10px, 80%'
    
        },
       x: -40,
       y: -40,
    
        opacity: 0,
        duration: 0.7
        
    },"-=0.2")
     
    
    
    
    
    gsap.from('.testimonialsText', {
        scrollTrigger: {
            trigger: '.testimonialsText',
            start: '40px, 80%'
    
        },
       y: 80,
    
        opacity: 0,
        duration: 0.7
        
    },"-=0.2")
     
    
    
    
    gsap.from('.fullGrida', {
        scrollTrigger: {
            trigger: '.fullGrida',
            start: '30px, 80%'
    
        },
    
        opacity: 0,
        duration: 0.7
        
    },"-=0.2")
     
    
    
    
    gsap.from('.redparaMain', {
        scrollTrigger: {
            trigger: '.redparaMain',
            start: '30px, 80%'
    
        },
    
        opacity: 0,
        duration: 0.8
        
    },"-=0.2")
     
