package ejercicio;
import java.util.Random;
import java.util.Scanner;
import java.util.random.*;


public class Arrays {

	
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
      int []array2 = new int[10];
      int suma = 0;
    		for (int i = 0 ; i < 10;i++) {
    			System.out.println("Dime un numero: ");
    			int num = sc.nextInt();
    			array2[i] = num;
    		}
    		for (int elemento : array2) {
                System.out.print(elemento + " ");
                suma += elemento ;
            };
            System.out.println(" ");
            System.out.println("La suma de los elemntos es: "+suma);
            System.out.println("La media de los elemntos es: "+suma/10);
            int c = 9;
            for (int i = 0 ; i <= 4;i++) {
    			
    			int temp = array2[c];
    			array2[c] = array2[i];
    			array2[i] = temp;
    			c--;
    			
    			
    		}
            for (int elemento : array2) {
                System.out.print(elemento + " ");
                suma += elemento ;
            };  
            System.out.println(" ");
            System.out.print("Posiciones impares ");
            for (int i = 0 ; i < 10;i++) {
    			
    			System.out.print(array2[i]+" , ");
    			i++;;
    			
    			
    		}
            System.out.println(" ");
            System.out.print("Posiciones pares ");
            for (int i = 1 ; i < 10;i++) {
    			
    			System.out.print(array2[i]+" , ");
    			i++;;
    			
    	
            }
            
            
            //3
            System.out.println(" ");
            Random random = new Random();
            
            int numero = 0;
            int sumay = 0;
            int [][]bidimensional = new int [10][10]  ;
            for (int i = 0 ; i < 10;i++) {
            	System.out.print("| ");
            	int sumalinea = 0;
    			for (int j = 0 ; j < 10;j++) {
    				
    			
    			numero = random.nextInt(101);
    			bidimensional[i][j] = numero;
    			
    			System.out.printf(" %3d |",bidimensional[i][j]);
    			sumalinea += bidimensional[i][j];
    			sumay += bidimensional[i][j];
    			}
    			System.out.println(" La media de la fila es " + sumalinea/10);
    			
    			System.out.println("-".repeat(62));

    		}
            for (int i = 0 ; i < 10;i++) {
            	int sumacolu = 0;
            	for (int j = 0 ; j < 10;j++) {
                	sumacolu += bidimensional[j][i];
                }
            	System.out.println(" La media de la columna " + i +" es " + sumacolu/10);
            }
            System.out.println(" La media de total es " + sumay/100);
            
            
         //4
            int []dimensional = new int [10000]  ;
            for (int i = 0 ; i < 10000;i++) {
            	int dado1 = random.nextInt(1,7);
                int dado2 = random.nextInt(1,7);
                int dado = dado1 + dado2 ;
                dimensional[i] = dado;
               
            }
            
            java.util.Arrays.sort(dimensional);
            int aux = 0;
            int sumaaux = 0;
            for (int elemento : dimensional) {
               if (elemento == aux) {
            	   sumaaux++;
            	   aux = elemento;
               }
               else if (aux != 0) {
            	   System.out.println("El número "+aux+" se repite "+sumaaux);
            	   aux = elemento;
            	   sumaaux =0;;
               }
               aux = elemento;
               
            };  
            
            
            
            
            
	}

}
