<?php
include('view/index.html')
?>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyA-GajH6akNBjQBK0UsyvkJKsdNBr-HTMk",
    authDomain: "mikiweys.firebaseapp.com",
    projectId: "mikiweys",
    storageBucket: "mikiweys.appspot.com",
    messagingSenderId: "1057045033770",
    appId: "1:1057045033770:web:c868ba43142f901f0a2453",
    measurementId: "G-BEMEE8VRHK"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>