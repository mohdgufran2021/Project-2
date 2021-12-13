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





</script>


</div>
<script src="<?php echo base_url('/assets/js/bootstrap.bundle.js') ?>"></script>
</body>
</html>
