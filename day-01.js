// 1 - 

function Longest_String(array){
  
    let longest_Str ="";
    
    for (let i=0 ; i< array.length-1 ; i++){
      if(i==0){
        longest_Str = array[i]
      }else{
        if(array[i].length < array[i+1].length){
          
          longest_Str = array[i+1]
        }
      }
      
    }
    
    console.log(longest_Str);
    
  }
  
  Longest_String(["fghj","ftcyguhijokp","fcgvhj"]);

  // 2 - 

  let array1 = [1,0,2,3,4];
let array2 = [3,5,6,7,8,13];


function sum() {
  let array=[];
  for (let i=0 ; i< array1.lengh ; i++){
    
  
  array[i]=array1[i]+array2[i];
}

console.log(array);

}

sum();