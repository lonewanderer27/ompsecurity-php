<?php $contact = get_field("contact", 13) ?>
<h4 class="h4 text-uppercase text-white">Contact Us:</h4>
<hr />
<div class="row s-font px-3 mb-3">
  <table class="contact-numbers">
    <tbody>
      <tr>
        <td class="text-center">
          <p class="p">
            <span class="text-uppercase fw-bold">Tel. Number:</span><br />
            <!-- <span>8877 - 8676</span> -->
            <span><?= $contact["tel_number"] ?></span>
          </p>
          <p class="p">
            <span class="text-uppercase fw-bold">Fax:</span><br />
            <!-- <span>8877 - 8677</span> -->
            <span><?= $contact["fax"] ?></span>
          </p>
        </td>
        <td class="text-center">
          <p class="p text-uppercase">
            <span class="text-uppercase fw-bold">Mobile Numbers:</span>
            <?php foreach($contact["mobile_numbers"] as $mobile_number) : ?>
            <br />
            <span><?= $mobile_number["mobile_number"] ?></span>
            <?php endforeach ?>
            <!-- <br />
            <span>+63 920 838 5399</span>
            <br />
            <span>+63 906 214 3513</span> -->
          </p>
        </td>
      </tr>
    </tbody>
  </table>
</div>