<!--
<script type="text/babel" src="./components/Button/Button.jsx"></script>
<script type="text/babel" src="./components/Select/Select.jsx"></script>
<script type="text/babel" src="./components/Emptynodes/Emptynodes.jsx"></script>
<script type="text/babel" src="./components/Nodeselect/Nodeselect.jsx"></script>
<script type="text/babel" src="./components/Suggestions/Suggestions.jsx"></script>
<script type="text/babel" src="./components/Addchamps/Addchamps.jsx"></script>
-->

<script type="text/babel">

  function App(){

    const [Champions,setChampions] = React.useState([]);

  
    const [Render,setRender] = React.useState(0);



    /* Initial */
    React.useEffect(() => {
      fetch('./data/champions.json')
        .then((response) => response.json())
        .then(function(json){
            setChampions(json)    
            console.log(json)
      }) 
    }, []);

    


    return (    
        <div className="App">
        {
          Champions.map((c,i)=>{
            return(
              <div key={"champion_"+i}>{c.Name}</div>
            )
          })
        }          
        </div>
      )


    
    }
      
    const container = document.getElementById('root');
    const root = ReactDOM.createRoot(container);
    root.render(<App name="Template" callback={() => console.log("Template rendered")} />)
    
</script>

