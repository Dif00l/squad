function Champion(props){
    var awake = "#FFF";
    if(props.Awake == "1"){
        awake = "lightblue";
    }

    var tPI = props.PI;var cPI;
    var PI = tPI.substring(0,tPI.length-3)
    PI += "."
    PI += tPI.substring(tPI.length-3,tPI.length)
 
    return(
        <div title={"Name: "+props.Name+"\r\nTier: "+props.Tier+"\r\nRang: "+props.Rang+"\r\nPower Index: "+PI} style={{textAlign:"center",margin:".3em",width:"106px",height:"87px",float:"left",backgroundImage:"url('http://images.4lima.de/champions/"+props.Image+".png'),url('http://images.4lima.de/frames/t"+props.Tier+"_portrait_frame.png'),url('http://images.4lima.de/class/class_"+props.Klasse+".png')",backgroundSize:"63%,cover,90%",backgroundRepeat:"no-repeat",backgroundPosition:"center,center"}}>
            <br/><br/><br/><br/><span style={{fontSize:"10pt",marginTop:"10px",border:"1px solid #FFF",backgroundColor:"#000",color:awake,padding:".1em"}}>&nbsp;{PI}&nbsp;</span>
        </div>
    )
}
