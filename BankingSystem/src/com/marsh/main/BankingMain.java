package com.marsh.main;

import java.util.InputMismatchException;
import java.util.Scanner;

import com.marsh.bean.Customer;
import com.marsh.service.BankingService;
import com.marsh.service.BankingServiceImpl;

//User Interface
public class BankingMain {
	private BankingService bService;
	public BankingMain() {
		bService = new BankingServiceImpl();
		Scanner scan = new Scanner(System.in);
		int choice = 0;
		while(true) {
			choice = getChoice(scan);
			switch (choice) {
			case 1:
				System.out.println("Create Customer");
				System.out.println("Enter <Name> <Mobile> <Acc type> <balance>");
				Customer cust = new Customer(0,scan.next(),scan.nextLong(),scan.next(),scan.nextDouble());
				boolean success = bService.createCustomer(cust);
				if(success) {
					System.out.println("Customer created");
				}
				else {
					System.out.println("Error. Could not create customer");
				}
				break;
			case 2:
				System.out.println("Deposit Amount");
				System.out.println("Enter the account number");
			try {
				
				long accNo1 = scan.nextLong();
				long acc = bService.getAccNo(accNo1);
				if(acc != -1) {
					System.out.println("Enter the Amount");
					double amt = scan.nextDouble();
					double depositAmount = bService.setBalance(acc, amt);
					if(acc != -1)
						  System.out.println("Balance Deposited");
						else
						  System.out.println("Account not found");
				}else {
				  System.out.println("Account not found");
				  break;
	
			}
			}catch (Exception e) {
				System.out.println("Enter Correct details");
				 break;
			}
				 
			
				
				
				
			case 3:
				
				  break;
				
			case 4:
				System.out.println("Check Balance");
				System.out.println("Enter the account number");
				long accNo = scan.nextLong();
				double balance = bService.getBalance(accNo);
				if(balance != -1)
				  System.out.println("Balance = " + balance);
				else
				  System.out.println("Account not found");
				break;
			case 5:
				System.out.println("Exiting system. Thank you.");
				System.exit(0);
				break;

			default:
				System.out.println("Please enter 1 to 5 only");
				break;
			}
		}
	}

	private int getChoice(Scanner scan) {
		int choice = 0;
		System.out.println("Banking System");
		System.out.println("1. Create Customer");
		System.out.println("2. Deposit Amount");
		System.out.println("3. Withdraw Amount");
		System.out.println("4. Check Balance");
		System.out.println("5. Exit System");
		System.out.println("Choose the option");
		try {
		   choice = scan.nextInt();
		}catch (InputMismatchException e) {
			System.out.println("Please enter number only");
			scan.nextLine();// consume wrong value in keyboard
		}
		return choice;
	}

	public static void main(String[] args) {
		new BankingMain();
	}

}
