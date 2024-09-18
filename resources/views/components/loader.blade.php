 <!-- progress area start -->
 <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
<!-- progress area end -->

<button id="supportBtn" name="support-btn" class="support-btn cursor-pointer border-transparent">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-call"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/><path d="M14.05 2a9 9 0 0 1 8 7.94"/><path d="M14.05 6A5 5 0 0 1 18 10"/></svg>
</button>


<div id="chatbot-window" class="chat-container position-fixed">
    <button class="close-button">&times;</button>
    <div id="chatbot-messages"></div>
</div>

<div class="modal success-modal" id="successModal" style="display: none;">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">×</span>
        <div class="modal-body">
            <div class="checkmark">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h2>Formulário enviado!</h2>
            <p>Em breve nossa equipe entrará em contato com você para esclarecer com mais detalhes. Agradecemos a preferência</p>
            <button class="btn btn-secondary w-100 mt-4" id="confirmButton">Confirmado!</button>
        </div>
    </div>
</div>


<!-- ==================== Start Loading ==================== -->
<div class="loader-wrap">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>

    <div class="loader-wrap-heading">
        <div class="load-text">
            <span>C</span>
            <span>a</span>
            <span>r</span>
            <span>r</span>
            <span>e</span>
            <span>g</span>
            <span>a</span>
            <span>n</span>
            <span>d</span>
            <span>o</span>
        </div>
    </div>
</div>

<!-- ==================== End Loading ==================== -->
