 // Your web app's Firebase configuration
 var firebaseConfig = {
    apiKey: "AIzaSyArpUTkhJsAI5ZMV-3wdB5UgTC_STylbMI",
    authDomain: "suscripciones-64ed0.firebaseapp.com",
    databaseURL: "https://suscripciones-64ed0.firebaseio.com",
    projectId: "suscripciones-64ed0",
    storageBucket: "suscripciones-64ed0.appspot.com",
    messagingSenderId: "461902687217",
    appId: "1:461902687217:web:0834796466e5b629a4b250"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

 const db = firebase.firestore()
  const form = document.getElementById('subscribe-form')
  form.addEventListener('submit', async (e)=>{
      e.preventDefault()
      const {subscribe} = e.target  
 await db.collection('subscribers').doc().set({email:subscribe.value})
 form.subscribe.value = ''
  })

  const getSuscribers = ()=> db.collection('subscribers').get()

  window.addEventListener('DOMContentLoaded',async (e)=>{
      const querySnapshot = await getSuscribers()
      querySnapshot.forEach(d => {
          console.log(d.data());
      });
  })