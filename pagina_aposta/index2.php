<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias 3D</title>
    <!-- Alterado o caminho da folha de estilos -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
      #p {
        color: #97e7d1;
        color: #c3f4fc;
        border: 2px solid white; /* Adiciona uma borda sólida de 2px de largura em preto */
        padding: 10px;
        text-align: center; /* Centraliza o texto */
        font-weight: bold; /* Peso da fonte */
        color: white; /* Cor do texto */
        text-shadow: 
            -1px -1px 0 #000,  
             1px -1px 0 #000,
            -1px  1px 0 #000,
             1px  1px 0 #000; 
      }
      #we {
       
        text-align: center; /* Centraliza o texto */
        font-weight: bold; /* Peso da fonte */
        color: white; /* Cor do texto */
        text-shadow: 
            -1px -1px 0 #000,  
             1px -1px 0 #000,
            -1px  1px 0 #000,
             1px  1px 0 #000; 
      }
      #h4 #h3  {

        color: #97e7d1;
        color: #c3f4fc;
        border: 2px dashed red; /* Adiciona uma borda tracejada de 2px de largura em vermelho */
        padding: 10px;
        text-align: center; /* Centraliza o texto */
        
        font-weight: bold; /* Peso da fonte */
        color: white; /* Cor do texto */
        text-shadow: 
            -1px -1px 0 #000,  
             1px -1px 0 #000,
            -1px  1px 0 #000,
             1px  1px 0 #000; 
      }

    </style>
    
</head>
<body>
    <main>
        <nav class="main-menu">
            <h1>Fitness App</h1>
            <!-- Corrigido o caminho da imagem do logo -->
            <img class="logo" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/4cfdcb5a-0137-4457-8be1-6e7bd1f29ebb" alt="" />
            <ul>
                <li class="nav-item active">
                    <b></b>
                    <b></b>
                    <a href="#" onclick="showContent('homeContent')" id="homeLink">
                        <i class="fa fa-house nav-icon">Home</i>
                        <span class="nav-text">Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <b></b>
                    <b></b>
                    <a href="#1" onclick="showContent('profileContent')" id="profileLink">
                        <i class="fa fa-user nav-icon">Perfil</i>
                        <span class="nav-text">Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <b></b>
                    <b></b>
                    <a href="#2" onclick="showContent('scheduleContent')" id="scheduleLink">
                        <i class="fa fa-calendar-check nav-icon">oo</i>
                        <span class="nav-text">Schedule</span>
                    </a>
                </li>

                <li class="nav-item">
                    <b></b>
                    <b></b>
                    <a href="#3" onclick="showContent('activitiesContent')" id="activitiesLink">
                        <i class="fa fa-person-running nav-icon">oo</i>
                        <span class="nav-text">Activities</span>
                    </a>
                </li>

                <li class="nav-item">
                    <b></b>
                    <b></b>
                    <a href="#4" onclick="showContent('settingsContent')" id="settingsLink">
                        <i class="fa fa-sliders nav-icon">oo</i>
                        <span class="nav-text">Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
        

        <!-- ---------------------------------------------------------------------------------------- -->
        
        <section>
            <div class="left-content" id="homeContent">
                    <div class="activities">
                        <h1>Principais políticos</h1>
                          <div class="activity-container">
                            <div class="image-container img-one">
                                <img src="../img/lula.png" alt="tennis" />
                          <div class="overlay">
                            <h3 id="we">Luís Inácio Lula da Silva</h3>
                            <p id="p"> é uma das personalidades mais famosas e importantes na política brasileira.</p>
                          </div>
                    </div>

              <div class="image-container img-two">
                <img src="../img/jair.png" alt="hiking" />
                <div class="overlay">
                  <h3 id="we">Jair Bolsonaro</h3>
                  <p id="p">Nascido em Campinas, descendente de uma família italiana e desde a juventude seguiu carreira militar.</p>
                </div>
              </div>

              <div class="image-container img-three">
                <img src="../img/dilma.png" alt="running" />
                <div class="overlay">
                  <h3 id="we">Dilma Rousseff</h3>
                  <p id="p">Dilma Roussef foi a primeira mulher a presidir o Brasil, e foi inclusive reeleita. Já familiarizada com os meandros do poder, Dilma foi durante cinco anos ministra da Casa Civil (2005-2010) do governo Lula.</p>
                </div>
              </div>

              <div class="image-container img-four">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/69437d08-f203-4905-8cf5-05411cc28c19" alt="cycling" />
                <div class="overlay">
                  <h3>Cycling</h3>
                </div>
              </div>

              <div class="image-container img-five">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e1a66078-1927-4828-b793-15c403d06411" alt="yoga" />
                <div class="overlay">
                  <h3>Yoga</h3>
                </div>
              </div>

              <div class="image-container img-six">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/7568e0ff-edb5-43dd-bff5-aed405fc32d9" alt="swimming" />
                <div class="overlay">
                  <h3>Swimming</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="left-bottom">
            <div class="weekly-schedule">
              <h1>Weekly Schedule</h1>
              <div class="calendar">
                <div class="day-and-activity activity-one">
                  <div class="day">
                    <h1>13</h1>
                    <p>mon</p>
                  </div>
                  <div class="activity">
                    <h2>Swimming</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/90affa88-8da0-40c8-abe7-f77ea355a9de" style="--i: 2" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/07d4fa6f-6559-4874-b912-3968fdfe4e5e" style="--i: 3" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e082b965-bb88-4192-bce6-0eb8b0bf8e68" style="--i: 4" alt="" />
                    </div>
                  </div>
                  <button class="btn">Join</button>
                </div>

                <div class="day-and-activity activity-two">
                  <div class="day">
                    <h1>15</h1>
                    <p>wed</p>
                  </div>
                  <div class="activity">
                    <h2>Yoga</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/32037044-f076-433a-8a6e-9b80842f29c9" style="--i: 2" alt="" />
                    </div>
                  </div>
                  <button class="btn">Join</button>
                </div>

                <div class="day-and-activity activity-three">
                  <div class="day">
                    <h1>17</h1>
                    <p>fri</p>
                  </div>
                  <div class="activity">
                    <h2>Tennis</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/32037044-f076-433a-8a6e-9b80842f29c9" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e082b965-bb88-4192-bce6-0eb8b0bf8e68" style="--i: 2" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 3" alt="" />
                    </div>
                  </div>
                  <button class="btn">Join</button>
                </div>

                <div class="day-and-activity activity-four">
                  <div class="day">
                    <h1>18</h1>
                    <p>sat</p>
                  </div>
                  <div class="activity">
                    <h2>Hiking</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/07d4fa6f-6559-4874-b912-3968fdfe4e5e" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/32037044-f076-433a-8a6e-9b80842f29c9" style="--i: 2" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/07d4fa6f-6559-4874-b912-3968fdfe4e5e" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 4" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/90affa88-8da0-40c8-abe7-f77ea355a9de" style="--i: 5" alt="" />
                    </div>
                  </div>
                  <button class="btn">Join</button>
                </div>
              </div>
            </div>

            <div class="personal-bests">
              <h1>Personal Bests</h1>
              <div class="personal-bests-container">
                <div class="best-item box-one">
                  <p>Fastest 5K Run: 22min</p>
                  <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/242bbd8c-aaf8-4aee-a3e4-e0df62d1ab27" alt="" />
                </div>
                <div class="best-item box-two">
                  <p>Longest Distance Cycling: 4 miles</p>
                  <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/a3b3cb3a-5127-498b-91cc-a1d39499164a" alt="" />
                </div>
                <div class="best-item box-three">
                  <p>Longest Roller-Skating: 2 hours</p>
                  <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e0ee8ffb-faa8-462a-b44d-0a18c1d9604c" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================= -->
        <div class="right-content">
          <div class="user-info">
            <div class="icon-container">
              <i class="fa fa-bell nav-icon">  </i>
              <i class="fa fa-message nav-icon">  </i>
            </div>
            <h4>Kelsey Miller</h4>
            <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/40b7cce2-c289-4954-9be0-938479832a9c" alt="user" />
          </div>

          <!-- <div class="active-calories"> -->
            <!-- <h1 style="align-self: flex-start">Active Calories</h1> -->
            <div class="active-calories-container">
              <div class="box" style="--i: 85%">
                <div class="circle">
                  <h2>85<small>%</small></h2>
                </div>
              </div>
              <div class="calories-content">
                <p><span>Today:</span> 400</p>
                <p><span>This Week:</span> 3500</p>
                <p><span>This Month:</span> 14000</p>
              </div>
            </div>
          </div>

           <div class="mobile-personal-bests">
            <h1>Personal Bests</h1>
            <div class="personal-bests-container">
              <div class="best-item box-one">
                <p>Fastest 5K Run: 22min</p>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/05dfc444-9ed3-44cc-96af-a9cf195f5820" alt="" />
              </div>
              <div class="best-item box-two">
                <p>Longest Distance Cycling: 4 miles</p>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/9ca170e9-1252-4fa6-8677-36493540c1f2" alt="" />
              </div>
              <div class="best-item box-three">
                <p>Longest Roller-Skating: 2 hours</p>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/262d1611-ed4c-4297-981c-480cf7f95714" alt="" />
              </div>
            </div>
          </div>

         </div>
        
        

                       
                        
    

        <!-- ---------------------------------------------------------------------------------------- -->
       
        <div class="left-content" id="profileContent" >
            <center>
                <p>op</p></center>
            </div>

            <div class="left-content" id="scheduleContent" >
                <h1>Agenda</h1>
                <p>Aqui está o conteúdo da agenda.</p>
            </div>

            <div class="left-content" id="activitiesContent" >
                <h1>Atividades</h1>
                <p>Aqui está o conteúdo das atividades.</p>
            </div>

            <div class="left-content" id="settingsContent" >
                <h1>Configurações</h1>
                <p>Aqui está o conteúdo das configurações.</p>
            </div>
        </section>
    </main>

    <script>
        function showContent(contentId) {
            var contents = document.querySelectorAll('.left-content');
            contents.forEach(function(content) {
                content.style.display = 'none';
            });
            var selectedContent = document.getElementById(contentId);
            selectedContent.style.display = 'block';
            setActiveLink(contentId.replace('Content', 'Link'));
        }

        function setActiveLink(linkId) {
            var links = document.querySelectorAll('.nav-item a');
            links.forEach(function(link) {
                link.classList.remove('active');
            });
            var activeLink = document.getElementById(linkId);
            activeLink.classList.add('active');
        }

        // Exibir a página inicial por padrão
        showContent('homeContent');
    </script>
    <script src="../js/js2.js"></script>
</body>
</html>


