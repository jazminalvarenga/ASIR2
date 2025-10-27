package ejercicio;
import java.util.Scanner;

public class Binario {
 
	    public static void main(String[] args) {
	        
	        Scanner scanner = new Scanner(System.in);
	        int limiteInferior = 1;
	        int limiteSuperior = 100;
	        String respuesta = "";
	        
	        System.out.println("Piensa en un número entre 1 y 100.");
	        System.out.println("Instrucciones: Responde 'MAYOR', 'MENOR' o 'IGUAL'.");
	        
	        
	        while (limiteInferior <= limiteSuperior) {
	            
	            
	            int intento = limiteInferior + (limiteSuperior - limiteInferior) / 2;
	            
	            System.out.println("------------------------------------------");
	            System.out.println("Mi intento es: **" + intento + "**.");
	            System.out.print("¿Tu número es MAYOR, MENOR o IGUAL a " + intento + "? ");
	            
	            respuesta = scanner.nextLine().toUpperCase();
	            
	            if (respuesta.equals("IGUAL")) {
	                System.out.println("🎉 **¡Hecho!** ¡Tu número era el **" + intento + "**!");
	                break; // El sistema adivinó, salimos del bucle
	                
	            } else if (respuesta.equals("MAYOR")) {
	                // Si el número es MAYOR, el límite inferior se actualiza a intento + 1
	                limiteInferior = intento + 1;
	                
	            } else if (respuesta.equals("MENOR")) {
	                // Si el número es MENOR, el límite superior se actualiza a intento - 1
	                limiteSuperior = intento - 1;
	                
	            } else {
	                System.out.println("Respuesta no válida. Intenta de nuevo.");
	            }
	        }

	        
	    }
	
}
