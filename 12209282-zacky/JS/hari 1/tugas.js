//1
const numbers = [1, 2, 3, 4, 5];

function doubleArrayElements(arr) {
  return arr.map(element => element * 2);
}

const doubledNumbers = doubleArrayElements(numbers);

console.log(doubledNumbers);

//2
const data = [
    { id: 1, value: 5 },
    { id: 2, value: 12 },
    { id: 3, value: 8 },
    { id: 4, value: 15 },
  ];
  
  function filter(arr) {
    return arr.filter(item => item.value > 10);
  }
  
  const filteredData = filter(data);
  
console.log(filteredData);
  
//3
const fruits = ['apel', 'pisang', 'ceri', 'anggur'];

const joinedString = fruits.join(', ');

console.log(joinedString);

//4
const person = ['John', 'Doe', 30];

// Membuat objek JavaScript
const personObj = {
  firstName: person[0],
  lastName: person[1],
  age: person[2],
};

// Mengonversi objek JavaScript menjadi JSON
const personJSON = JSON.stringify(personObj);

console.log(personJSON);

//5
const people = [
    { firstName: 'John', lastName: 'Doe' },
    { firstName: 'Alice', lastName: 'Smith' },
    { firstName: 'Bob', lastName: 'Johnson' },
  ];
  
  function getFullNames(peopleArray) {
    return peopleArray.map(person => `${person.firstName} ${person.lastName}`);
  }
  
  const fullNames = getFullNames(people);
  
  console.log(fullNames);  

//6
const numbers1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function filterOddNumbers(arr) {
  return arr.filter(number1 => number1 % 2 !== 0);
}

const oddNumbers = filterOddNumbers(numbers1);

console.log(oddNumbers);

//7
const items = [
    { name: 'Item A', value: 10 },
    { name: 'Item B', value: 20 },
    { name: 'Item C', value: 30 },
  ];
  
  function calculateTotalValue(itemArray) {
    return itemArray.reduce((total, item) => total + item.value, 0);
  }
  
  const totalValue = calculateTotalValue(items);
  
  console.log(totalValue);  

//8
const bookInfo = {
    title: "Harry Potter and the Sorcerer's Stone",
    author: 'J.K. Rowling',
    year: 1997,
  };
  
  const bookInfoJSON = JSON.stringify(bookInfo);
  
  console.log(bookInfoJSON);  

//9
const people1 = [
    { name: 'Alice', age: 25 },
    { name: 'Bob', age: 32 },
    { name: 'Charlie', age: 28 },
  ];
  
  function filterPeopleUnder30(peopleArray) {
    return peopleArray.filter(person => person.age < 30);
  }
  
  const youngPeople = filterPeopleUnder30(people1);
  
  console.log(youngPeople);  

//10
const student = {
    name: 'Lisa',
    age: 20,
    major: 'Computer Science',
  };
  
  const studentJSON = JSON.stringify(student);
  
  console.log(studentJSON);
  