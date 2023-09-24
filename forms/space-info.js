fetch('http://api.open-notify.org/astros.json')
  .then(response => response.json())
  .then(data => {
    let table = document.getElementById('spaceData');
    data.people.forEach(person => {
      let row = table.insertRow();
      let cell1 = row.insertCell();
      let cell2 = row.insertCell();
      cell1.textContent = person.name;
      cell2.textContent = person.craft;
    });
  })
  .catch(error => console.error('Error:', error));