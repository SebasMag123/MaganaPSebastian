$(document).ready(async function () {
  
  
    setTimeout(async () => {
      const query = await fetch("./query.php");
  
      const data = await query.json();
      
      var List = [];
  
      for (let i = 0; i < data.length; i++) {
  
        object = {
        Id_Nombre:data[i][0],
        Fabricante:data[i][1],
        TipoAvion:data[i][2],
        PrimerVuelo:data[i][3],
        Introduccion:data[i][4],
        NumConstruidos:data[i][5],
        CostoProg:data[i][6],
        CostoUnit:data[i][7],
        CostoHora:data[i][8]
        }
        List.push(object);
      }
  
      console.log(List)
      $("#jsGrid").jsGrid({
        width: "100%",
        height: "600px",
    
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
    
        data: List,
    
        fields: [
         { name: "Id_Nombre", type: "text", width: 50 },
          { name: "Fabricante", type: "text", width: 75},
          { name: "TipoAvion", type: "text", width: 75 },
          { name: "PrimerVuelo", type:"date", width: 75 },
          {name: "Introduccion",type:"date",width:75},
          {name:"CostoProg",type:"int",width:75},
          {name:"CostoUnit",type:"int",width:75},
          {name:"CostoHora",type:"int",width:75}
         
        ],
      });
  
  
    }, 1000);
  
  
  });