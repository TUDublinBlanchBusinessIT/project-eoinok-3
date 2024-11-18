import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, TextInput, Button, Alert } from 'react-native';

export default function App() {

  function clickMe() {
    console.log("clicked!");
    alert("Clicked");
  }

  return (
    <View style={styles.container}>
      <Text style={styles.label}>Enter your firstname</Text>
      <TextInput style={styles.textbox} placeholder="Enter your firstname"/>
      <Text>Enter your lastname</Text>
      <TextInput style={styles.textbox} placeholder="Enter your lastname"/>
      <Button title="Click Me" onPress={clickMe}/>
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
  label: {
    fontSize: "25",
    fontFamily: "Arial"
  },
  textbox: {
    fontSize: "25",
    fontFamily: "Arial",
    border: "1px solid black"
  }
});
