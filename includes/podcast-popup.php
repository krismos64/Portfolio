 <!-- logo podcast -->
 <div class="podcast-container" onclick="openPopup('TJXDgX5yApI')">
     <svg
         class="podcast-icon"
         viewBox="0 0 100 100"
         xmlns="http://www.w3.org/2000/svg">
         <!-- Fond circulaire -->
         <circle cx="50" cy="50" r="48" fill="#1a1f2e" />

         <!-- Microphone -->
         <rect x="40" y="25" width="20" height="35" rx="10" fill="#bd3dff" />
         <rect x="42" y="27" width="16" height="31" rx="8" fill="#d896ff" />

         <!-- Support du micro -->
         <rect x="45" y="60" width="10" height="15" fill="#bd3dff" />
         <rect x="35" y="75" width="30" height="5" rx="2" fill="#bd3dff" />

         <!-- Ondes sonores animées -->
         <g stroke="#00ffcc" fill="none" stroke-width="2">
             <path class="sound-wave" d="M 25,50 Q 35,50 35,50" />
             <path class="sound-wave" d="M 65,50 Q 75,50 75,50" />
             <path class="sound-wave" d="M 20,40 Q 30,50 20,60" />
             <path class="sound-wave" d="M 80,40 Q 70,50 80,60" />
         </g>

         <!-- Grille du micro -->
         <g fill="#ffffff">
             <circle cx="50" cy="35" r="1.5" />
             <circle cx="50" cy="40" r="1.5" />
             <circle cx="50" cy="45" r="1.5" />
             <circle cx="46" cy="37.5" r="1.5" />
             <circle cx="54" cy="37.5" r="1.5" />
             <circle cx="46" cy="42.5" r="1.5" />
             <circle cx="54" cy="42.5" r="1.5" />
         </g>
     </svg>
     <span class="podcast-text">Nouveau ! Ma présentation sous forme d'un podcast généré par l'IA de
         Notebook LM</span>
 </div>

 <!-- Popup Video commune pour les trois liens -->
 <div class="popup-overlay" id="videoPopup">
     <div class="popup-container">
         <button class="close-button" onclick="closePopup()">×</button>
         <div class="video-wrapper">
             <iframe
                 src=""
                 frameborder="0"
                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe>
         </div>
     </div>
 </div>
 <!-- Fin Popup Video -->

 <!-- logo podcast end-->