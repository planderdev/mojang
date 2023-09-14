

<!-- alarm modal s-->
<div class="modal fade" id="alarmmodal" tabindex="-1" aria-labelledby="alarmmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="alarmmodalLabel">알림</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alarm_list">
             <ul>
            <li>
            <div class="txt"> 
                <div class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
                <div class="date"><span class="me-2">2023-09-04</span><span>17:24:24</span></div>
                </div>
                 
            </li>
            <li>
            <div class="txt">
            <div class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
            <div class="date"><span class="me-2">2023-09-04</span><span>17:24:24</span></div>
                </div>
                
            </li>
            <li>
            <div class="txt">
            <div class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
            <div class="date"><span class="me-2">2023-09-04</span><span>17:24:24</span></div>
                </div>
                
            </li>
        </ul>
         </div>
        </div>
        <div class="modal-footer bg-primary-lightest border-0">
          <button type="button" class="btn btn-lg btn-primary" data-bs-dismiss="modal">닫기</button>
         </div>
      </div>
    </div>
  </div>
<!-- alarm modal e--> 

<!-- 상담받기 Modal s -->
<div class="modal fade" id="consultingModal" tabindex="-1" aria-labelledby="consultingModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="consultingModal">전화연결</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-3">
      <img src="img/blog_6.png" class="consult_img">
      <div class="my-4 subtitle1">모두의 장례 24시간 상담 서비스</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-md btn-gray" data-bs-dismiss="modal">취소</button>
        <button type="button" class="btn btn-md btn-primary">상담받기</button>
      </div>
    </div>
  </div>
</div>
<!-- 상담받기 Modal e -->  

<!--하단 네비게이션-->
<nav class="navbar fixed-bottom navbar-expand-sm bg-white">
   <div class="container-fluid" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' 0, 'opsz' 48;">
       <ul class="bottom_nav_wrap">
           <li class="nav_active" onclick="location.href='index.html'">
           <span class="material-symbols-outlined">home</span>
               홈
           </li>
           <li onclick="location.href='opinion.html'">
           <span class="material-symbols-outlined">library_books</span>
           장례희망서
           </li> 
           <li onclick="location.href='search.html'">
           <span class="material-symbols-outlined">search</span>
           장례식장 검색
           </li>
           <li data-bs-toggle="modal" data-bs-target="#consultingModal">
           <span class="material-symbols-outlined">call</span>
           상담받기
           </li>
           <li onclick="location.href='mypage.html'">
           <span class="material-symbols-outlined">person</span>
           마이페이지
           </li>
       </ul>

   </div>
</nav>
</div>  
<!--wrap e-->

<script>
    const darkButton = document.getElementById('dark-button')
    const lightButton = document.getElementById('light-button')
    const html = document.querySelector('html')

    darkButton.addEventListener('click', () => {
        html.setAttribute('data-bs-theme', 'dark')
    })
    lightButton.addEventListener('click', () => {
        html.setAttribute('data-bs-theme', 'light')
    })
</script>

</body> 
</html> 