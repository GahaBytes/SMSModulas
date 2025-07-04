function openModal(buttonId) {
  const deleteBtn = document.getElementById(buttonId);
  var id = buttonId.split("_")[1];
  const confirmationModal = document.getElementById("deleteModal_" + id);
//   console.log(deleteBtn);
//   console.log(confirmationModal);

  confirmationModal.style.display = "block";
}


function closeModal(buttonId) {
  const closeBtn = document.getElementById(buttonId);
  var id = buttonId.split("_")[1];
  const confirmationModal = document.getElementById("deleteModal_" + id);

  // console.log(closeBtn);
  // console.log(confirmationModal);

  confirmationModal.style.display = "none";
}
