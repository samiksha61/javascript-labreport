function calculateBMI(weight, height) {
    
    const bmi = weight / (height * height);
    return bmi;
}

const weight1 = 70; 
const height1 = 1.75; 

const weight2 = 80;
const height2 = 1.80;

const bmi1 = calculateBMI(weight1, height1);
const bmi2 = calculateBMI(weight2, height2);

console.log(`BMI for person 1: ${bmi1}`);
console.log(`BMI for person 2: ${bmi2}`);
