<script>
  const errorJson = <?php echo isset($error) ? json_encode($error) : 'null'; ?>;

  function showError(modalId, msgContainerId) {
    const modalContainer = document.getElementById(modalId);
    const msgContainer = document.getElementById(msgContainerId);

    if (errorJson && errorJson.length > 0) {
      msgContainer.textContent = errorJson[0];
      modalContainer.classList.toggle("hidden");
    }
  }

  showError("error-modal", "error-message");
</script>
<script src="/assets/js/main.js"></script>
</body>

</html>