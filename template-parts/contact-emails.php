<?php $department_emails = get_field("department_emails", 13) ?>
<div class="row s-font px-3 d-none d-md-block">
  <table class="contact-emails">
    <thead>
      <th>
        <span class="text-uppercase fw-bold">Departments:</span>
      </th>
      <th>
        <span class="text-uppercase fw-bold">Contact:</span>
      </th>
    </thead>
    <?php foreach($department_emails as $department) : ?>
    <?php
      $name = $department["name"];
        $emails = $department["email"];
        ?>
    <tr>
      <td><?= $name ?></td>
      <td>
        <?php foreach($emails as $department_email) : ?>
        <span
              class="email-toggle"><?= $department_email["email"] ?></span>
        <?php endforeach; ?>
      </td>
    </tr>

    <?php endforeach; ?>
    <!-- <tr>
      <td>General Contact</td>
      <td>
        <span class="email-toggle">mail@ompsecurity.com</span>
        <br />
        <span class="email-toggle">arsiasec@gmail.com</span>
      </td>
    </tr>
    <tr>
      <td>Marketing Dept</td>
      <td>
        <span class="email-toggle">marketing@ompsecurity.com</span>
      </td>
    </tr>
    <tr>
      <td>Human Resources Dept</td>
      <td>
        <span class="email-toggle">hr@ompsecurity.com </span>
      </td>
    </tr>
    <tr>
      <td>Payroll and Remittance Dept</td>
      <td>
        <span class="email-toggle">finance@ompsecurity.com </span>
      </td>
    </tr>
    <tr>
      <td>Billing and Collection Dept</td>
      <td>
        <span class="email-toggle">financebilling@ompsecurity.com
        </span>
      </td>
    </tr>
    <tr>
      <td>Logistics Dept</td>
      <td>
        <span class="email-toggle">logistics@ompsecurity.com
        </span>
      </td>
    </tr>
    <tr>
      <td>Administration Dept</td>
      <td>
        <span class="email-toggle">admin@ompsecurity.com</span>
      </td>
    </tr> -->
  </table>
</div>
<?php get_template_part("template-parts/contact", "emails_accordion"); ?>