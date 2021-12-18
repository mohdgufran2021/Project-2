<script>
    //1
    /*
       function  main()
        {
         return 1+2;
        }
        console.warn( main());
     */


    //2
    /*
    let data = [1,5,4,7,8,6,543,100,50];
    let result = data.find(function(item){
        return item>6;
    });
    console.warn(result);
    */


    //3
    /*
    let data = [20, 50, 100, 30, 200];

    /!*let  result = data.findIndex(function (index){
        return index<30;});*!/

    //or we can write

    let result = data.findIndex((index) => index >20 && index < 100);
    console.warn(result);
    */


    //4
    /*
     let data = [
        {id: 10, name: 'Gufran'},
        {id: 20, name: 'Aman'},
        {id: 40, name: 'Shubham'},
        {id: 30, name: 'Gufran'},
        {id: 80, name: 'Gufran'},
        {id: 100, name: 'Gufran'},
        {id: 200, name: 'Gufran'}
    ];
    function find(value) {
        return value.id > 30;
    }
    let result = data.find(find);
    //or
    /!*function (value)
           {
            return value.id>80;
           });
     *!/
    console.warn(result);
    */



    //5
    /*
    let data = [1,3,5,6,7,8,9];
          /!*    function double(item)
                 {
                   return item*2;
                 }
              let result = data.map(double);
              console.warn(result);
           *!/

    //or

    let result = data.map((item)=>item*2);
    console.warn(result);
    */



    //6
    /*
      let item = {
         name:'Gufran',
          getName:function ()
          {
              console.warn("Normal",this);
          },

         //or

         getNameArrow:()=>console.warn("Arrow",this)
     }
     item.getName();
     item.getNameArrow();
     */



    //7
    /*
        let data = {
         list: 'Friends',
         names: ['Bruice', 'Peter', 'Sam'],
         getFriends: function (){
             this.names.map((items) => {
                 console.warn(this.list, items)
             });
         }
     }
     data.getFriends();
     */



    //8   (Rest Operator(...))
    /*
     function fruits(...a)
     {
         console.warn("Fruits",a);
     }
     fruits('apple','banana','Mango','papaya','pineapple');
     */



    //9   (Promise() function)
    /*
    function promise(){
      return new Promise(function (resolve,reject)
      {
          setTimeout(() => {
              const error=true;
              if (!error){
                  console.log('your Promise is Resolved.')
                  resolve('Done');
              }
              else
              {
                  console.log('Your Promise is Reject.')
                  reject('Reject');
              }
          },3000);
         })
        }
          promise().then(function(){
              console.log('Thank You.')
          }).catch(function (error){
              console.log('Sorry' + error)
          })
          */


    //10 (isFinite() function) it returns true or false if number then true.
    /*
     let a=100;
     let b=isFinite(a);
     console.log(b);
     */


    //11    (isNaN() function)  it returns true or false if not a number then true.
    /*
        let a=100;
        let b=isNaN(a);
        console.log(b);
     */



    //12   (Destructuring of an array=array's elements stores in a variables.)
    /*
    let fruits = ['Apple','Banana','Papaya','Kiwi'];
    /!*let [fruit1,fruit2,fruit3,fruit4] = fruits;
    console.log(fruit1);
    console.log(fruit2);
    console.log(fruit3);
    console.log(fruit4);*!/

    //if we can not take middle of array element then we can=
    let [fruit1,,,fruit4]=fruits;
    console.log(fruit1,fruit4);
    */
    /*
        let fruits = ['Apple','Banana','Papaya','Kiwi'];
        let [fruit1,...fruitX] = fruits;
        console.log(fruitX);
      */





    //13    (object destructuring)
    /*
     let user = {name:'Gufran',email:'abc@fmail.com',contact:1234567890};
     let {email,name,contact}=user;
     console.log(email);
     console.log(name);
     console.log(contact);
     */






    //14   (spread Operator)
    /*
        let fruits = ['apple','Banana','Papaya','Kiwi'];
        let otherFruits = ['pineapple',...fruits,'guava'];
        function spread(a,...z)  //rest operator(...)
        {
            console.log(a,...z);
        }
        spread(...otherFruits)     //spread operator(...)
    */





    //15
    /*
     let a = Math.pow(2,5);
     //or
     let b = (2**5);     // I can use Negative Power
     //or
     let c = 2**(2**3);
     console.log("Math=>",a);
     console.log("(**)=>",b);
     console.log("n(**)n1(**)n2=>",c);
     */
</script>


<!--
<script type="module">
  import user,{self,my} from '/assets/js/javascript.js';
   user();
   self();
   my();

</script>
-->


<!--
<script>
    function* generator()
    {
        let a = 10;
        let b = 5;
        console.log(a + b);
        yield 'First step is Completed';

        console.log(a - b);
        yield 'Second Step is Completed';

        console.log(a * b);
        yield 'Third Step is Completed';

        console.log(a / b);
        yield 'Fourth Step is Completed';

        return 'All steps Are Completed';
    }
    let ins = generator();

    function getsteps()
    {
        console.log(ins.next());
    }
</script>
<button onclick="getsteps()">Step by Step</button>
-->

<script>      //Array Manipulation (forEach(), include(), )

    /*
    //forEach() Function=
    const arr = [1,2,3,4,5,6,7,8,9,10];
    arr.forEach(item=>
    {
        console.log(item);
    })
    */

    /*
        //includes() Function=
        const arr = [1,23,45,6,7,8,9,0,12];
        let check = arr.includes(8);
        console.log(check);
     */

    /*
        const arr = [1,2,3,45,6,7,8,90,9,10];
        function check()
        {
            const arr1 = [];
            arr.forEach( (item) =>
            {
                if (item>=7)
                {
                    arr1.push(item);
                }
            });
            console.log(arr1);
        }
        check();
      */


    /*

        //filter() Function=
        const arr = [1,2,3,54,6,678,86];
        const arr2 = arr.filter((item) => item>=54);
        console.log(arr2);
    */


    /*
      //map() Function=
        const arr = [12, 2, 3, 4, 4, 3, 4, 3, 34, 56, 0, 4, 35, 8];
        const arr1 = arr.map((item) => {
        return item + 1;
        });
        console.log(arr1);
    */

    /*
        //reduce() Function=
        const arr = [1,2,3,4,6,3,5,7,8];
        console.log( arr.reduce( (total,item) => total+item, 0 ) );
      */


    /*

    //some() Function=
    const arr = [1,2,3,4,56,6,7,44,54,23,1,3,5,2];
    const bool = arr.some( (item) => item>=44);
    if (bool==true)
    {
        console.log(bool,'The Condition is Satisfies.')
    }
    else
    {
        console.log(bool,'The Condition is not Satisfies')
    }
    */


    /*
        //every() Function=
        const arr = [21,43,234,2,1,4];
        const bool = arr.every( (item) => item>=1);
        if (bool==true)
        {
            console.log(bool, 'Every Item of Array is Passed the Condition.');
        }
        else
        {
            console.log(bool, 'The Array Items is not the Passed The Condition.');
        }
     */


    /*
        //sort() Function=
        const arr = [12,32,54,523];
        const sort = arr.sort( (a, b) => a>b ? -1 : 1);
        console.log(sort);
    */


    /*
        //Array.from() Function
        let name = 'Gufran';
        let array = Array.from(name);
        console.log(array);
      */

    /*
        //Array.of() Function=
        let arr = Array.of(14,5,2,3,43);
        console.log(arr);
      */



    class Employee
    {
    constructor( givenName, givenExperience, givenDivision )
    {
       this.name = givenName;
       this.experience = givenExperience;
       this.division = givenDivision;
    }
    }
   obj = new Employee( 'Gufran', '3 Years', 'Computer Science' );
    console.log(obj);




</script>


</script>


</div>
<script src="<?php echo base_url('/assets/js/bootstrap.bundle.js') ?>"></script>
</body>
</html>
