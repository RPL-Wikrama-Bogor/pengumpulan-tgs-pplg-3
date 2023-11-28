//no.9
const people = [
    { name: 'Alice', age: 25, hobby : 'momotoran' },
    { name: 'Bob', age: 32, hobby : 'turing' },
    { name: 'Charlie', age: 28, hobby : 'sunmori' },
  ];
const under30 = people.filter((people) => people.age > 30 && people.age < 35 && people.hobby == 'turing')
console.log(under30)


const student = {
    name: 'Lisa',
    age :20,
    major : 'Rpl'
}

console.log(student);


//no.6
const numbers = [1,2,3,4,5,6,7,8,9,10]

const numberss = numbers.filter((number) =>number %2 ===1)
console.log(numberss);

//no.7
const items = [
  { name: 'Item A', value: 10 },
  { name: 'Item B', value: 20 },
  { name: 'Item C', value: 30 },
];

const total = items.reduce((total, item) => total + item.value, 0)
console.log(total);

   