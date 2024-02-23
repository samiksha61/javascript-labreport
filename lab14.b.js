document.addEventListener('DOMContentLoaded', function() {
    const categoryFilter = document.getElementById('category');
    const itemList = document.getElementById('itemList').getElementsByTagName('li');
  
    categoryFilter.addEventListener('change', function() {
      const selectedCategory = this.value;
  
      for (let item of itemList) {
        const itemCategory = item.getAttribute('data-category');
        if (selectedCategory === 'all' || selectedCategory === itemCategory) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      }
    });
  });