document.getElementById('revealexpress').addEventListener('loaded', () => {

  const buttons = document.querySelectorAll('.tab-button');

  for (const button of buttons) {
    button.addEventListener('click', e => {
      e.preventDefault();

      const container = e.currentTarget.closest('.tabs-container');
      const targetClass = e.currentTarget.dataset.target;
      const tabs = container.querySelectorAll('.tabs > *');

      for (const tab of tabs) {
        tab.style.display = 'none';
      }
      container.querySelector('.' + targetClass).style.display = 'block';
    });
  }

});
