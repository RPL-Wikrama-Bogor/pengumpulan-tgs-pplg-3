const peoples = [
    { name: 'Alice', age: 25 },
    { name: 'Bob', age: 32 },
    { name: 'Charlie', age: 28 },
  ];
const filtAge = peoples.filter((people) => people.age < 30) 
const totalAge = peoples.reduce((sum, people) => sum + people.age, 0);
console.log('total umur : ', totalAge);