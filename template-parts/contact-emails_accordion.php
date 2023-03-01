<?php $department_emails = get_field("department_emails", 13) ?>
<div
     class="mb-md-5 contact-accordion d-block <?= (is_page("hiring") or is_page("contact") or is_single()) ? "" : "d-md-none" ?>">
  <div class="accordion"
       id="accordionExample">
    <?php $index = 0; ?>
    <?php foreach($department_emails as $department) : ?>
    <?php
      $name = $department["name"];
        $emails = $department["email"];
        ?>
    <div class="accordion-item">
      <h2 class="accordion-header"
          id="heading<?= $index ?>">
        <button class="accordion-button <?= $index == 0 ? "" : "collapsed" ?>"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse<?= $index ?>"
                aria-expanded="<?= $index == 0 ? "true" : "false" ?>"
                aria-controls="collapse<?= $index ?>">
          <?= $name ?>
        </button>
      </h2>
      <div id="collapse<?= $index ?>"
           class="accordion-collapse collapse <?= $index == 0 ? "show" : "" ?>"
           aria-labelledby="heading<?= $index ?>">
        <div class="accordion-body d-flex flex-column justify-content-center">
          <?php foreach($emails as $department_email) : ?>
          <span
                class="email-toggle"><?= $department_email["email"] ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php  $index++; ?>
    <?php endforeach; ?>

    <!-- <div class="accordion-item">
      <h2 class="accordion-header"
          id="headingOne">
        <button class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne">
          General Contact
        </button>
      </h2>
      <div id="collapseOne"
           class="accordion-collapse collapse show"
           aria-labelledby="headingOne"
           data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex flex-column justify-content-center">
          <span class="email-toggle"> mail@ompsecurity.com </span>
          <span class="email-toggle">ompsec@gmail.com</span>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header"
          id="headingTwo">
        <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo">
          Marketing Department Contact
        </button>
      </h2>
      <div id="collapseTwo"
           class="accordion-collapse collapse"
           aria-labelledby="headingTwo"
           data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex flex-column justify-content-center">
          <span class="email-toggle">marketing@ompsecurity.com</span>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header"
          id="headingThree">
        <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree">
          Human Resources Dept Contact
        </button>
      </h2>
      <div id="collapseThree"
           class="accordion-collapse collapse"
           aria-labelledby="headingThree"
           data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex flex-column justify-content-center">
          <span class="email-toggle">hr@ompsecurity.com</span>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header"
          id="headingFour">
        <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour">
          Payroll and Remittance Dept Contact
        </button>
      </h2>
      <div id="collapseFour"
           class="accordion-collapse collapse"
           aria-labelledby="headingFour"
           data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex flex-column justify-content-center">
          <span class="email-toggle">finance@ompsecurity.com</span>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header"
          id="headingFive">
        <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFive"
                aria-expanded="false"
                aria-controls="collapseFive">
          Billing and Collection Dept Contact
        </button>
      </h2>
      <div id="collapseFive"
           class="accordion-collapse collapse"
           aria-labelledby="headingFive"
           data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex flex-column justify-content-center">
          <span class="email-toggle">financebilling@ompsecurity.com</span>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header"
          id="headingSix">
        <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSix"
                aria-expanded="false"
                aria-controls="collapseSix">
          Logististics Contact
        </button>
      </h2>
      <div id="collapseSix"
           class="accordion-collapse collapse"
           aria-labelledby="headingSix"
           data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex flex-column justify-content-center">
          <span class="email-toggle">logistics@ompsecurity.com</span>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header"
          id="headingSeven">
        <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSeven"
                aria-expanded="false"
                aria-controls="collapseSeven">
          Administration Contact
        </button>
      </h2>
      <div id="collapseSeven"
           class="accordion-collapse collapse"
           aria-labelledby="headingSeven"
           data-bs-parent="#accordionExample">
        <div class="accordion-body d-flex flex-column justify-content-center">
          <span class="email-toggle">admin@ompsecurity.com</span>
        </div>
      </div>
    </div> -->
  </div>
</div>