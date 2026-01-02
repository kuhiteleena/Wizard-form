let currentStep = 0;
const steps = document.querySelectorAll(".step");

function showStep(index) {
  steps.forEach(step => step.classList.remove("active"));
  steps[index].classList.add("active");
}
document.querySelector(".submit-btn").addEventListener("click", (e) => {
  if (!validateStep()) e.preventDefault();
});
function nextStep() {
  if (!validateStep()) return;
  currentStep++;
  if (currentStep >= steps.length) currentStep = steps.length - 1;
  showStep(currentStep);
}

function prevStep() {
  currentStep--;
  if (currentStep < 0) currentStep = 0;
  showStep(currentStep);
}

function validateStep() {
  const inputs = steps[currentStep].querySelectorAll("input");
  for (let input of inputs) {
    if (!input.checkValidity()) {
      input.reportValidity();
      return false;
    }
  }
  return true;
}

// write a function to get api data and show in the div with id api-output
// api response will be like this 
//  {
//         "id": {
//             "timestamp": 1767251774,
//             "date": "2026-01-01T07:16:14.000+00:00"
//         },
//         "title": "Sad",
//         "content": "I am Sad",
//         "date": "2026-01-01T12:46:14.606"
//     },
// async function fetchApiData() {
//   try {
//     const response = await fetch('http://localhost:8081/journal');
//     const data = await response.json();
//     const outputDiv = document.getElementById('api-output');
//     outputDiv.innerHTML = `

//       <h3>API Data:</h3>
//       <p><strong>Title:</strong> ${data[0].title}</p>
//       <p><strong>Content:</strong> ${data[0].content}</p>
//       <p><strong>Date:</strong> ${data[0].date}</p>
//     `;
//   } catch (error) {
//     console.error('Error fetching API data:', error);
//   } 
// } 

// fetchApiData();

// write function to take values from the form and post on the api endpoint http://localhost:8081/journal using fetch api
// async function postFormData(formData) {
//   try {
//     const response = await fetch('http://localhost:8081/journal', 
//     {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/json'
//       },
//       body: JSON.stringify(formData)  
//     });
//     const data = await response.json();
//     console.log('Success:', data);
//   } catch (error) {
//     console.error('Error posting form data:', error);
//   } 
// }

// on form submit take all values and post to api