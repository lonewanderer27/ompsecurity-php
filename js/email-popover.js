const emailUrls = (vendor, targetEmail) => {
  switch (vendor) {
    case "gmail":
      // return `mailto:?subject=Change your subject&body=Change your email content&to=${targetEmail}`;
      return `https://mail.google.com/mail/?view=cm&fs=1&to=${targetEmail}&su=SUBJECT&body=BODY`;
    case "yahoo":
      return `https://compose.mail.yahoo.com/?to=${targetEmail}&subject=SUBJECT&body=BODY`;
  }
};

const popoverTriggerList = document.querySelectorAll(".email-toggle");
const emailPopver = document.querySelector("#email-popover");
console.log(popoverTriggerList);
console.log(emailPopver);

popoverTriggerList.forEach((popoverTriggerEl) => {
  const email = popoverTriggerEl.textContent;
  const emailPopoverClone = emailPopver.cloneNode(true);
  emailPopoverClone.classList.remove("d-none");
  const parent = popoverTriggerEl.parentElement;
  parent.append(emailPopoverClone);
  const emailTrigger = emailPopoverClone.childNodes[1];
  emailTrigger.textContent = email;
  emailTrigger.title = "Click to send message to this email.";
  emailTrigger.classList.add("emailTrigger");
  const dropdownMenuUL = emailPopoverClone.childNodes[3]; // dropdown-menu
  console.log("dropdownMenuUL: ", dropdownMenuUL);
  const dropdownMenuLI = dropdownMenuUL.childNodes[1]; // <li>
  console.log("dropdownMenuLI: ", dropdownMenuLI);
  for (i = 0; i < 2; i++) {
    const emailBtn = document.createElement("a");
    emailBtn.target = "_blank";
    if (i === 0) {
      emailBtn.classList.add("yahoo-mail-btn");
      emailBtn.innerText = "Open with Yahoo Mail";
      emailBtn.href = emailUrls("yahoo", email);
    }
    if (i === 1) {
      emailBtn.classList.add("gmail-btn");
      emailBtn.innerText = "Open with Gmail";
      emailBtn.href = emailUrls("gmail", email);
    }
    dropdownMenuLI.appendChild(emailBtn);
    dropdownMenuLI.appendChild(document.createElement("br"));
  }
  popoverTriggerEl.remove();
});
