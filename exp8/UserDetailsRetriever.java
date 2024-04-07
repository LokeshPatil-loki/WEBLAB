import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import java.io.File;
import java.util.Scanner;

public class UserDetailsRetriever {
    public static void main(String[] args) {
        try {
            // Create a File instance for the XML document
            File xmlFile = new File("users.xml");

            // Create a DocumentBuilderFactory instance
            DocumentBuilderFactory dbFactory = DocumentBuilderFactory.newInstance();

            // Create a DocumentBuilder instance
            DocumentBuilder dBuilder = dbFactory.newDocumentBuilder();

            // Parse the XML document
            Document doc = dBuilder.parse(xmlFile);

            // Normalize the XML structure
            doc.getDocumentElement().normalize();

            // Get the root element
            Element rootElement = doc.getDocumentElement();

            // Print instructions
            System.out.println("Enter a user ID to retrieve user details:");

            // Get user input
            Scanner scanner = new Scanner(System.in);
            int userId = scanner.nextInt();

            // Get the list of user nodes
            NodeList userNodes = rootElement.getElementsByTagName("user");

            // Iterate through the user nodes
            for (int i = 0; i < userNodes.getLength(); i++) {
                Node userNode = userNodes.item(i);

                if (userNode.getNodeType() == Node.ELEMENT_NODE) {
                    Element userElement = (Element) userNode;

                    // Get the user ID
                    int id = Integer.parseInt(userElement.getElementsByTagName("id").item(0).getTextContent());

                    // If the user ID matches, print the user details
                    if (id == userId) {
                        String name = userElement.getElementsByTagName("name").item(0).getTextContent();
                        String email = userElement.getElementsByTagName("email").item(0).getTextContent();
                        int age = Integer.parseInt(userElement.getElementsByTagName("age").item(0).getTextContent());

                        System.out.println("User Details:");
                        System.out.println("ID: " + id);
                        System.out.println("Name: " + name);
                        System.out.println("Email: " + email);
                        System.out.println("Age: " + age);
                        break;
                    }
                }
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}