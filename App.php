
<script type="text/babel" src="./components/Select/Select.jsx"></script>
<script type="text/babel" src="./components/Champion/Champion.jsx"></script>
<script type="text/babel" src="./components/Button/Button.jsx"></script>
<!--
<script type="text/babel" src="./components/Nodeselect/Nodeselect.jsx"></script>
<script type="text/babel" src="./components/Suggestions/Suggestions.jsx"></script>
<script type="text/babel" src="./components/Addchamps/Addchamps.jsx"></script>
-->

<script type="text/babel">

  function App(){

    const [Champions,setChampions] = React.useState([]);
    const [PlayerChampions,setPlayerChampions] = React.useState([]);

  
    const [Render,setRender] = React.useState(0);



    /* Initial */
    React.useEffect(() => {
      fetch('./data/champions.json?version='+Math.floor(Math.random() * 100) + 1)
        .then((response) => response.json())
        .then(function(json){
            setChampions(json)           
      }) 
    }, []);

    function loadPlayerChampions(e){     
      fetch('./data/'+e.target.value+'.json?version='+Math.floor(Math.random() * 100) + 1)
        .then((response) => response.json())
        .then(function(json){
            setPlayerChampions(json)           
      }) 
    }

    


    return (    
        <div className="App">
          <div style={{height:"96.5vh",float:"left",position:"fixed",borderRight:"1px solid #FFF",textAlign:"center",paddingRight:"8px",backgroundColor:"#000"}}>
            <img src="./images/logo.png" width="100"/>
            <br/>
            <Select onselect={loadPlayerChampions}/>
            <Button Text="Add"/>
            <Button Text="7 Star"/>
            <Button Text="6 Star"/>
            <Button Text="5 Star"/>
            <hr/>
            <Button Text="Mutant"/>
            <Button Text="Forschung"/>
            <Button Text="Talent"/>
            <Button Text="Mystisch"/>
            <Button Text="Kosmos"/>
            <Button Text="Technologie"/>
            <hr/>            
          </div>
          <div style={{width:"6%",float:"left",padding:"8px"}}>&nbsp;</div>
          <div style={{float:"left",padding:"8px"}}>
              <table border="0">
                <tbody>
                <tr>
                    <td style={{borderBottom:"1px solid #FFF"}}>
                      {
                        PlayerChampions.map((c,i)=>{
                          if(c.Tier == "7" && c.Rang == "2" || c.Tier == "6" && c.Rang == "5")
                          return(                           
                            <Champion key={"pchampions_"+i} Name={c.Name} Image={c.Image} PI={c.PowerIndex} Tier={c.Tier} Rang={c.Rang} Awake={c.Awake} Klasse={c.Klasse}/>
                              
                            
                          )
                        })
                      }    
                    </td>
                  </tr>
                  <tr>
                    <td style={{borderBottom:"1px solid #FFF"}}>
                      {
                        PlayerChampions.map((c,i)=>{
                          if(c.Tier == "7" && c.Rang == "1" || c.Tier == "6" && c.Rang == "4")
                          return(                           
                            <Champion key={"pchampions_"+i} Name={c.Name} Image={c.Image} PI={c.PowerIndex} Tier={c.Tier} Rang={c.Rang} Awake={c.Awake} Klasse={c.Klasse}/>                             
                              
                            
                          )
                        })
                      }    
                    </td>
                  </tr>
                  <tr>
                    <td style={{borderBottom:"1px solid #FFF"}}>
                      {
                        PlayerChampions.map((c,i)=>{
                          if(c.Tier == "6" && c.Rang == "3")
                          return(                           
                            <Champion key={"pchampions_"+i} Name={c.Name} Image={c.Image} PI={c.PowerIndex} Tier={c.Tier} Rang={c.Rang} Awake={c.Awake} Klasse={c.Klasse}/>                             
                              
                            
                          )
                        })
                      }    
                    </td>
                  </tr>
                  <tr>
                    <td style={{borderBottom:"1px solid #FFF"}}>
                      {
                        PlayerChampions.map((c,i)=>{
                          if(c.Tier == "6" && c.Rang == "2")
                          return(                           
                            <Champion key={"pchampions_"+i} Name={c.Name} Image={c.Image} PI={c.PowerIndex} Tier={c.Tier} Rang={c.Rang} Awake={c.Awake} Klasse={c.Klasse}/>                             
                              
                            
                          )
                        })
                      }    
                    </td>
                  </tr>
                  <tr>
                    <td style={{borderBottom:"1px solid #FFF"}}>
                      {
                        PlayerChampions.map((c,i)=>{
                          if(c.Tier == "6" && c.Rang == "1")
                          return(                           
                            <Champion key={"pchampions_"+i} Name={c.Name} Image={c.Image} PI={c.PowerIndex} Tier={c.Tier} Rang={c.Rang} Awake={c.Awake} Klasse={c.Klasse}/>                             
                              
                            
                          )
                        })
                      }                      
                    </td>
                  </tr>
                </tbody>
              </table>
         </div>      
        </div>
      )


    
    }
      
    const container = document.getElementById('root');
    const root = ReactDOM.createRoot(container);
    root.render(<App name="Template" callback={() => console.log("Template rendered")} />)
    
</script>

<!--

<table>
            <tbody>
          {
            Champions.map((c,i)=>{
              return(
                <tr key={"champion_"+i}>
                  <td>{c.Name}</td>
                  <td>{c.Klasse}</td>
                  <td><img height="50" src={"http://images.4lima.de/champions/"+c.Image+".png"}/></td>
                </tr>
              )
            })
          }    
          </tbody>
          </table>
        -->
