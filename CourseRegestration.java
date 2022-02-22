
package courseregestration;

import java.util.Scanner;


public class CourseRegestration {

     public static void main(String[] args) {
         
       Scanner input = new Scanner(System.in);
       String name;
       
       Course[] courses = new Course[9];
       
       System.out.printf("WELCOME TO THE COURSE REGESTRATION PLATFORM  \n\n\n");
       
       for(int i=1; i< courses.length; i++){
           System.out.print("Enter course names: ");
           name = input.nextLine();
           courses[i] = new Course(name);
          
       }
       
       System.out.printf("INDEX\t NAME\n");
       
       for(int i = 1; i< courses.length; i++){
           System.out.printf("%d\t %s\n", i, courses[i].Name() );
       }
        
    }
    
}
